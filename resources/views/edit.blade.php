@extends('layouts.tasklist')
@section('content')

<section id="contact">
    <div class="contact-box">
      <div class="contact-links">
        <h2>Edit Your Task</h2>
      </div>
      <div class="contact-form-wrapper">
        <form>
          <div class="form-item">
            <input type="text" name="title" value="{{ old('title', $task->title) }}" required>
            <label>Title:</label>
          </div>
          <div class="form-item">
            <textarea name="description">{{ old('description', $task->description) }}</textarea>
            <label>Description:</label>
          </div>
          <button class="submit-btn">To update</button>  
        </form>
      </div>
    </div>
  </section>

@endsection