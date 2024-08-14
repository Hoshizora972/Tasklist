<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>TaskList</title>
<link rel="stylesheet" href="{{asset('css/style3.css')}}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<!-- lien cndjs -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- lien boxicons -->
<link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
    <body>
        <div class="wrapper">
            <h1>Your Task List</h1>
            <div class="cols">
                @forelse ($tasks as $task)
                <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                <div class="front" style="background-image: url(https://img.freepik.com/premium-photo/relaxing-time-stopped-water-background-black-tones_978588-29175.jpg)">
                <div class="inner">
                    <p>{{$task->title}}</p>
                    <span>{{$task->description}}</span>
                    
                        @if ($task->state === 0)
                            <div class="check"> 
                                <a href="{{route('task.update',$task)}}"id=""><i class='bx bx-checkbox' ></i></a>
                            </div>
                        @else
                            <div class="checked"> 
                                <a href="{{route('task.remove',$task)}}"id=""><i class='bx bx-checkbox-checked'></i></a>
                            </div>
                        @endif
                </div>
                </div>
                    <div class="back">
                        <div class="inner">
                            <p> Edit Or Delete</p>
                            <p>  Your task</p>
                            <br>
                            {{-- Création d'une condition permetant de mettre a jour le statut en fonction du statut actuelle de la tache --}}
                            <div class="edition">
                                @if ($task->state === 0)
                            <div class="check"> 
                                <a href="{{route('task.update',$task)}}"id=""><i class='bx bx-checkbox' ></i></a>
                            </div>
                        @else
                            <div class="checked"> 
                                <a href="{{route('task.remove',$task)}}"id=""><i class='bx bx-checkbox-checked'></i></a>
                            </div>
                        @endif
                            <div class="edit">
                                <a href="{{route('task.edit',$task)}}"id=""><i class='bx bx-edit-alt' ></i></a> 
                            </div>
                                <div class="delete">
                                    <a href="{{route('task.destroy',$task)}}"id=""><i class='bx bxs-trash' ></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div> 
            @empty
            No task available
            @endforelse
            </div>
        </div>
    </body>
</html>