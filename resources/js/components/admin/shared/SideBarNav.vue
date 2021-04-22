<template>
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0"
         id="side-menu">
        <div class="container-fluid d-flex flex-column p-0">
            <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                <div class="sidebar-brand-text mx-3"><span>Brand</span></div>
            </a>
            <hr class="sidebar-divider my-0">
            <ul class="nav navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item" role="presentation">
                    <a class="nav-link">
                        <i class="fas fa-tachometer-alt"/>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <router-link to="/users" class="nav-link" active-class="active">
                        <i class="fas fa-user"/>
                        <span>Users</span>
                    </router-link>
                </li>
                <li class="nav-item" role="presentation">
                    <router-link class="nav-link" to="/players" active-class="active">
                        <i class="fas fa-users"/>
                        <span>Players</span>
                    </router-link>
                </li>
                <li class="nav-item" role="presentation">
                    <router-link class="nav-link" to="/tags" active-class="active">
                        <i class="fas fa-tags"/>
                        <span>Tags</span>
                    </router-link>
                </li>
                <li class="nav-item" role="presentation">
                    <router-link class="nav-link" to="/topics" active-class="active">
                        <i class="fas fa-book"/>
                        <span>Topics</span>
                    </router-link>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link">
                        <i class="fas fa-gamepad"/>
                        <span>Challenges</span>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link">
                        <i class="fa fa-gears"/>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
            <div class="text-center d-none d-md-inline">
                <button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {}
</script>

<style scoped>

</style>
