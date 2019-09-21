<div class="app-sidebar__user">
    <a href="{{ route('home') }}">
        {{--        @dd($company);--}}
        {{--        <img class="app-sidebar__user-avatar" src="{{ asset($company_common->logo) }}" alt="User Image" height="50" width="50">--}}
        <img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
    </a>

    <div>
        <a href="{{ route('home') }}"><p class="app-sidebar__user-name">{{ $company->name }}</p></a>
        <p class="app-sidebar__user-designation">Admin</p>
    </div>
</div>

<ul class="app-menu">
    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-cog fa-lg"></i><span
                    class="app-menu__label">Website Settings</span><i class="treeview-indicator fa
                    fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('company.edit', 1) }}"><i class="icon fa fa-circle-o"></i>
                    Company Settings</a></li>
        </ul>
    </li>


    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-pagelines"></i><span
                    class="app-menu__label">Page</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('page.create') }}"><i class="icon fa fa-circle-o"></i>Add
                    Page</a></li>
        </ul>
    </li>

    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span
                    class="app-menu__label">Business Category</span><i class="treeview-indicator fa
                    fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('article-category') }}"><i class="icon fa fa-circle-o"></i>Category</a></li>
            <li><a class="treeview-item" href="{{ route('article-sub-category') }}"><i class="icon fa fa-circle-o"></i>Sub Category</a></li>
        </ul>
    </li>

    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-newspaper-o"></i><span
                    class="app-menu__label">News</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('news.create') }}"><i class="icon fa fa-circle-o"></i>Add News</a></li>
        </ul>
    </li>

    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-user"></i>
            <span class="app-menu__label">Business Profile</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
        </a>
        <ul class="treeview-menu">
            <li>
                <a class="treeview-item" href="{{ route('business-profile.create') }}">
                    <i class="icon fa fa-circle-o"></i>
                    Add Business Profile
                </a>
            </li>

            <li>
                <a class="treeview-item" href="{{ route('profile-article.create') }}">
                    <i class="icon fa fa-circle-o"></i>
{{--                    Add Profile Article--}}
                    Add Product & Service
                </a>
            </li>
        </ul>
    </li>

    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-user-md"></i>
            <span class="app-menu__label">Buying Advice</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
        </a>
        <ul class="treeview-menu">
            <li>
                <a class="treeview-item" href="{{ route('buying-advice.create') }}">
                    <i class="icon fa fa-circle-o"></i>
                    Add Buying Advice
                </a>
            </li>
        </ul>
    </li>

    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-home"></i>
            <span class="app-menu__label">Home Page</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
        </a>
        <ul class="treeview-menu">
            <li>
                <a class="treeview-item" href="{{ route('about_us.edit', 1) }}">
                    <i class="icon fa fa-circle-o"></i>
                    About us
                </a>
            </li>
        </ul>
        <ul class="treeview-menu">
            <li>
                <a class="treeview-item" href="{{ route('features.edit', 1) }}">
                    <i class="icon fa fa-circle-o"></i>
                    Our features
                </a>
            </li>
        </ul>

        <ul class="treeview-menu">
            <li>
                <a class="treeview-item" href="{{ route('testimonial.edit', 1) }}">
                    <i class="icon fa fa-circle-o"></i>
                    Testimonial
                </a>
            </li>
        </ul>
    </li>


    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-home"></i>
            <span class="app-menu__label">Question</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
        </a>
        <ul class="treeview-menu">
            <li>
                <a class="treeview-item" href="{{ route('question.index') }}">
                    <i class="icon fa fa-circle-o"></i>
                    Approve Question
                </a>
            </li>
        </ul>
    </li>





{{--    <li class="treeview">--}}
{{--        <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">User</span><i class="treeview-indicator fa fa-angle-right"></i></a>--}}
{{--        <ul class="treeview-menu">--}}
{{--            <li><a class="treeview-item" href="{{ route('new-user') }}"><i class="icon fa fa-circle-o"></i>Add user</a></li>--}}
{{--            <li><a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i>Change Password</a></li>--}}
{{--        </ul>--}}
{{--    </li>--}}

@if(Auth::user()->role_id == 1)
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-cog fa-lg"></i><span class="app-menu__label">User Settings</span><i
                    class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li>
                <a class="treeview-item" href="{{ route('settings.create') }}"><i class="icon fa fa-circle-o"></i>
                    Change Password</a>
            </li>

{{--            <li>--}}
{{--                <a class="treeview-item" href="{{ route('copyright.create') }}"><i class="icon fa fa-circle-o"></i>--}}
{{--                    Copy Right</a>--}}
{{--            </li>--}}

{{--            <li>--}}
{{--                <a class="treeview-item" href="{{ route('profile_update') }}"><i class="icon fa fa-circle-o"></i>--}}
{{--                    Update Profile</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a class="treeview-item" href="{{ route('new-user') }}"><i class="icon fa fa-circle-o"></i>--}}
{{--                    Add User</a>--}}
{{--            </li>--}}
        </ul>
    </li>
    @endif


</ul>



