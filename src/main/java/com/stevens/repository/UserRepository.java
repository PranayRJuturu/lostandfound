package com.stevens.repository;

import org.springframework.data.jpa.repository.JpaRepository;

import com.stevens.model.Users;

public interface UserRepository extends JpaRepository<Users,Long>{

}
