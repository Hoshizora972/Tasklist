

    <header class="header">

        <div class="logo">
            <a href="{{route('info')}}"><img src="/image/sparkle.png" alt=""></a>
        </div>

        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class='bx bx-menu' id="menu-icon"></i>
            <i class='bx bx-x' id="close-icon"></i>
        </label>

        <nav class="navbar">
            <a href="{{route('home')}}" style="--i:0">Homepage</a>
            <a href="{{route('list')}}" style="--i:1">Tasks List</a>
            <a href="{{route('task.add')}}"style="--i:2">Add New Task</a>
            <a href="{{route('info')}}" style="--i:3">About me</a>
        </nav>

    </header>
