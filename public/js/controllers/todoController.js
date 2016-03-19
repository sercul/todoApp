angular.module('todoController', [])

    .controller('todoController', function ($scope, $http, Task) {
        $scope.taskData = {}

        Task.get()
            .success(function (tasksList) {
                $scope.tasks = tasksList;
            });

        $scope.submitTask = function () {

            Task.save($scope.taskData)
                .success(function (data) {

                    Task.get()
                        .success(function (tasksList) {
                            $scope.tasks = tasksList;
                        });
                })
                .error(function (data) {
                    console.log("There is en error: " + data);
                });
        };

        $scope.doneTask = function ($id) {
            Task.done($id)
                .success(function (data) {
                    Task.get()
                        .success(function (tasksList) {
                            $scope.tasks = tasksList;
                        });
                });
        };

        $scope.deleteTask = function ($id) {
            Task.destroy($id)
                .success(function (data) {
                    Task.get()
                        .success(function (tasksList) {
                            $scope.tasks = tasksList;
                        });
                });
        };

    });