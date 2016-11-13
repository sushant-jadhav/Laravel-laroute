app.service('userService',function($http){
	
	var promise;

	this.list = function() {

        promise = $http.get(laroute.route('ApiGetUsers')).success( function(response) {
	    	return response;
	   	});

	   	return promise;
    }

    this.getUser = function(user_id){

    	promise = $http.get(laroute.route('ApiGetUser',{id:user_id})).success( function(response) {
	    	return response;
	   	});

	   	return promise;

    }

});