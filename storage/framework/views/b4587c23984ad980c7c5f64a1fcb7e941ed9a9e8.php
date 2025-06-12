<li class="dropdown ms-2">
    <a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <div class="avatar avatar-md avatar-indicators avatar-online">
            <img alt="avatar" src="<?php echo e(asset('assets/images/avatar.jpg')); ?>" class="rounded-circle" />
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
        <div class="px-4 pb-0 pt-2">


            <div class="lh-1 ">
                <h5 class="mb-1"> FST user</h5>
            </div>
            <div class=" dropdown-divider mt-3 mb-2"></div>
        </div>

        <ul class="list-unstyled">

            <li>
                <a class="dropdown-item" href="<?php echo e(route('user.settings')); ?>">
                    <i class="bi me-2 bi-person-lines-fill"></i> Profile
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>">
                    <i class="bi bi-box-arrow-right me-2"></i> Déconnexion
                </a>
            </li>
        </ul>

    </div>
</li><?php /**PATH /home/fste-umi/public_html/fst/ens/website/resources/views/components/profile.blade.php ENDPATH**/ ?>