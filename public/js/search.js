$(document).ready(function() {

    var users_template, furnis_template, rooms_template, empty, users, furnis, rooms;

    users_template = Handlebars.compile($("#users-result-template").html());
    furnis_template = Handlebars.compile($("#furnis-result-template").html());
    rooms_template = Handlebars.compile($("#rooms-result-template").html());
    empty = Handlebars.compile($("#empty-template").html());

    users = new Bloodhound({
        identify: function(o) { return o.id_str; },
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('username', 'look', 'last_online'),
        dupDetector: function(a, b) { return a.id_str === b.id_str; },
        remote: {
            url: '/api/search/users/%QUERY',
            wildcard: '%QUERY'
        }
    });

    furnis = new Bloodhound({
        identify: function(o) { return o.id_str; },
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('public_name', 'item_name'),
        dupDetector: function(a, b) { return a.id_str === b.id_str; },
        remote: {
            url: '/api/search/furnis/%QUERY',
            wildcard: '%QUERY'
        }
    });

    rooms = new Bloodhound({
        identify: function(o) { return o.id_str; },
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name', 'owner', 'description'),
        dupDetector: function(a, b) { return a.id_str === b.id_str; },
        remote: {
            url: '/api/search/rooms/%QUERY',
            wildcard: '%QUERY'
        }
    });

    $('#espreso-search').typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    },
        {
            source: users,
            displayKey: 'username',
            templates: {
                header: '<h3 style="padding-left: 15px;">Users</h3>'
            }
        },

        {
            source: furnis,
            displayKey: 'public_name',
            templates: {
                header: '<h3 style="padding-left: 15px;">Furnis</h3>'
            }
        },

        {
            source: rooms,
            displayKey: 'name',
            templates: {
                header: '<h3 style="padding-left: 15px;">Rooms</h3>'
            }
        }
    );
});