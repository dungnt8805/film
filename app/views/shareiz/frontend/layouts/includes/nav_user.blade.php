@if(Sentry::check())
<li class="dropdown">
    <a class="dropdown-toggle profile-link" data-toggle="dropdown" href="#">
        <img class="profile-icon" src="<?=Sentry::getUser()->avatar?>"/> Me
        <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
        <li class="dropdown-header" role="presentation">My Profile</li>
        <li><a href="">View Profile</a></li>
    </ul>
</li>
@endif