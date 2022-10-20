package com.stevens.controller;

import java.util.ArrayList;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RestController;

import com.stevens.model.Users;
import com.stevens.service.UsersService;

@RestController
public class UserController {

	@Autowired
	private UsersService userService;
	
	@GetMapping("/users")
	List<Users> getUsers() {
		
    List<Users> userList = new ArrayList<>();
    userService.getUsers();
    return userList;
		
	} 
	
	@PostMapping("/users")
	Users addUser(Users users){
		
		Users createduser = userService.addUser(users);
		return createduser;
		
	}
	
}
