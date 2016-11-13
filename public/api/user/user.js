app.controller('userController', function($scope,userService) {
    
    userService.list().then(function(d){

    	$scope.users=d.data;

    });
    
});