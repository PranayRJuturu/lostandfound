package com.stevens.service;

import java.util.ArrayList;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.stevens.model.Users;
import com.stevens.repository.UserRepository;

@Service
public class UsersService {
	
	@Autowired
	private UserRepository userRepo;
	
	
	public List<Users> getUsers() {
		
		List<Users> users = new ArrayList<>();
		users = userRepo.findAll();
		return users;
	}
	
	public Users addUser(Users user) {
		
		
		Users user1 = new Users();
		user1.setName("John");
		user1.setDepartment("Software Engineering");
		user1.setContactno("1234");
		user1.setCWID("234235");
		user1.setEmail("asdfg@stevens.edu");
		user1.setId(1l);
		userRepo.save(user1);
		
		return user1;
	}

}
