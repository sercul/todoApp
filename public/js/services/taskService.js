angular.module('taskService', [])
    .factory('Task', function ($http) {
        return {
            get: function () {
                return $http.get('/api/task');
            },

            save: function (taskData) {
                return $http({
                    method: 'POST',
                    url: '/api/task',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(taskData)
                });
            },

            done: function ($id) {
                return $http({
                    method: 'GET',
                    url: '/api/task/done/' + $id
                });
            },

            destroy: function ($id) {
                return $http.delete('/api/task/' + $id);
            }


        }

    });