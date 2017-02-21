<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Http\Controllers\LogsController as Logs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SystemController extends Controller
{
    private $log;

    public function __construct(Logs $logManager)
    {
        $this->log = $logManager;
    }

    /**
     * Display the add system account view
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add_user_view(Request $request)
    {
        $request->request->add(['required_perm' => 'system_users_write']);
        $roles = Role::all();
        return view('system.users.add')->with(['page_title' => 'Add system account', 'roles' => $roles]);
    }

    /**
     * Add a new system account to the database
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add_user(Request $request)
    {
        $request->request->add(['required_perm' => 'system_users_write']);

        $this->validate($request, [
            'username' => 'required|min:3|max:15|unique:espreso_users',
            'email' => 'required|email|unique:espreso_users',
            'password' => 'required|min:8'
        ]);

        $user = new User();
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->rank = $request->input('rank');
        $user->save();

        $this->log->create($request, 'ACTION', 'Added a new system account with username ' . $request->input('username'));
        $request->session()->flash('success', 'User ' . $request->input('username') . ' added successfully');
        return redirect()->intended('/system/users');
    }

    public function add_role_view(Request $request)
    {
        $request->request->add(['required_perm' => 'system_roles_write']);
        return view('system.roles.add')->with(['page_title' => 'Add account role']);
    }

    public function add_role(Request $request)
    {

    }
}
