<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
@if (backpack_user()->admin == true)
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('user') }}'><i class='nav-icon la la-question'></i> Users</a></li>
@endif
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('book') }}'><i class='nav-icon la la-question'></i> Books</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('category') }}'><i class='nav-icon la la-question'></i> Categories</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('book-borrowing') }}'><i class='nav-icon la la-question'></i> Book borrowings</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('borrower') }}'><i class='nav-icon la la-question'></i> Borrowers</a></li>