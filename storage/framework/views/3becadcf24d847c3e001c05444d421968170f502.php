<nav id="sidebar">
    <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
        </button>
    </div>
    <div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
        <div class="user-logo">
            <div class="img  "
                style="background-image: url(<?php echo e(asset('UsersProfilesPictures/' . Auth::user()->profile_pic)); ?>);"
                data-bs-target="#changeProfilePictureModal" data-bs-toggle="modal">
                <div class="img blacks" data-bs-target="#changeProfilePictureModal" data-bs-toggle="modal"><a
                        class="Link_call_Modal_PDP" href="#" data-bs-target="#changeProfilePictureModal"
                        data-bs-toggle="modal"><small>Change</small></a></div>
            </div>
            <h3><?php echo e(Auth::user()->name . ' ' . Auth::user()->firstname); ?></h3>
        </div>
    </div>
    <ul class="list-unstyled components mb-5">
        <li <?php if(Request::route()->getName() == 'home'): ?> class="active" <?php endif; ?>>
            <a href="<?php echo e(route('home')); ?>"><span class="fa fa-home mr-3"></span> Home</a>
        </li>
        <li <?php if(Request::route()->getName() == 'notifications.index'): ?> class="active" <?php endif; ?>>
            <a href="<?php echo e(route('notifications.index')); ?>"><span class="fa fa-bell mr-3 notif"><small
                        class="d-flex align-items-center justify-content-center"><?php echo e($notificationCounter); ?></small></span>
                Notifications</a>
        </li>
        <li>
            <a href="analytics.html"><span class="fa fa-bar-chart mr-3"></span> Analytics</a>
        </li>

        <li <?php if(Request::route()->getName() == 'tasks.index'): ?> class="active" <?php endif; ?>>
            <a href="<?php echo e(route('tasks.index')); ?>"><span class="fa fa-tasks mr-3"></span> Tasks</a>
        </li>

        <!--Start Check If  User Admin Or Invoice/Clients Manager-->
        <?php if(Auth::user()->approvement == 1 && Auth::user()->role == 1 or Auth::user()->role == 2): ?>
            <li>
                <a href="invoices.html"><span class="fa fa-file-excel-o mr-3"></span> Invoices</a>
            </li>
            <li <?php if(Request::route()->getName() == 'client.index'): ?> class="active" <?php endif; ?>>
                <a href="<?php echo e(route('client.index')); ?>"><span class="fa fa-users mr-3"></span> Clients</a>
            </li>
        <?php endif; ?>
        <!--End Check If  User Admin Or Invoice/Clients Manager-->

        <?php if(Auth::user()->approvement == 1 && Auth::user()->role == 1): ?>
            <li <?php if(Request::route()->getName() == 'user.index'): ?> class="active" <?php endif; ?>>
                <a href="<?php echo e(route('user.index')); ?>"><span class="fa fa-address-book mr-3"></span> Users Manager</a>
            </li>
            <li <?php if(Request::route()->getName() == 'LocalAds.index'): ?> class="active" <?php endif; ?>>
                <a href="<?php echo e(route('LocalAds.index')); ?>"><span class="fa fa-bullhorn mr-3"></span> Local Ads</a>
            </li>
        <?php endif; ?>
        <li>
            <a href="profile.html"><span class="fa fa-user mr-3"></span> Profile</a>
        </li>
        <li>
            <a href="settings.html"><span class="fa fa-cog mr-3"></span> Settings</a>
        </li>
        <li>
            <a href="#" data-bs-toggle="modal" data-bs-target="#LogoutModal"><span class="fa fa-sign-out mr-3"></span>
                Sign Out</a>
        </li>
    </ul>

</nav>
<?php /**PATH /Users/aqamine/Desktop/MyBusiness/resources/views/layouts/sidebare.blade.php ENDPATH**/ ?>