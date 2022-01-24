<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="dashboard">Dashboard</a></li>
            <li><a href="{{ url('/tasks') }}">Task</a></li>
            <li><a href="{{ url('/categories') }}">Category</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
           
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-link" style="padding-top: 15px;"><span class="glyphicon glyphicon-log-out"></span> Logout </button>
                </form>
            </li>
        </ul>


    </div>
</nav>
