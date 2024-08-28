<?php

// Function to securely hash a password using bcrypt
function hashPassword($password) {
    $options = [
        'cost' => 12,
    ];
    // Hash the password with bcrypt 
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT,$options);
    
    return $hashedPassword;
}

// Function to verify if a password matches its hashed version
function verifyPassword($password, $hashedPassword) {
    return password_verify($password, $hashedPassword);
}