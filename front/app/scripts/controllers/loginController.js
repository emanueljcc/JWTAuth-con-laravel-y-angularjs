'use strict';

angular.module("frontApp")
.controller('LoginCtrl',function(authUser){
	
	var vm = this;
	vm.loginForm = {
		email: 'emanuelcastillo9101@gmail.com',
		password: '12345'
	};

	vm.login = function(){
		authUser.loginApi(vm.loginForm);
	}
});
