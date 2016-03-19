<!doctype html>
<html>
<head>
    <title>Todo application</title>

    <link rel="stylesheet" href="bower_components/uikit/css/uikit.almost-flat.css">

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/uikit/js/uikit.js"></script>
    <script src="bower_components/angular/angular.min.js"></script>
    <script src="js/controllers/todoController.js"></script>
    <script src="js/services/taskService.js"></script>
    <script src="js/app.js"></script>


</head>

<body class="uk-height-1-1" ng-app="todoApp" ng-controller="todoController">

<div class="uk-vertical-align uk-text-center uk-height-1-1" style="margin-top: 100px;">

    <div class="uk-vertical-align-middle" style="width: 450px;">
<h2> Yet another one todo list.</h2>
        <form name="myform" class="uk-panel uk-panel-box uk-form" ng-submit="submitTask()">

            <div class="uk-form-row">
                <input type="text" class="uk-width-1-1 uk-form-large" name="text" ng-model="taskData.text"
                       placeholder="Write down the next task" required>
            </div>

            <div class="uk-form-row">
                <button type="submit" class="uk-width-1-1 uk-button uk-button-primary uk-button-large">Submit</button>
            </div>
        </form>

        <ul class="uk-list uk-list-striped uk-text-left">
            <li class="task" ng-hide="loading" ng-repeat="task in tasks">

                <div class="uk-form-row" style="float:left">
                    <button ng-disabled="{{ task.status == 1 }}" class="uk-button uk-button-success"
                            ng-click="doneTask(task.id)" type="button">Done
                    </button>
                    <span style="margin-left: 10px;">{{ task.text }}</span>

                </div>
                <div class="uk-text-right">
                    <a href="#" ng-click="deleteTask(task.id)" class="uk-close"></a>

                </div>
            </li>

        </ul>

    </div>
</div>


</div>
</body>
</html>