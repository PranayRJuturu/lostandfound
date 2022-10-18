package com.stevens.controller;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class UserController {

	
	@GetMapping("/users")
	String getUsers() {
		
		
		String message = "Hello world!!";
		return message;
	} 
}
