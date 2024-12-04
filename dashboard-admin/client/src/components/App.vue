<!-- src/components/Sidebar.vue -->
<template>
    <div class="sidebar">
      <h2>Admin Dashboard</h2>
      <ul>
        <li><router-link to="/">Dashboard</router-link></li>
        <li><router-link to="/users">Users</router-link></li>
        <li><router-link to="/settings">Settings</router-link></li>
      </ul>
    </div>
  </template>