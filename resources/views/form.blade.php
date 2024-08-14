@extends('layouts.tasklist')
@section('content')

<section id="contact">
    <div class="contact-box">
      <div class="contact-links">
        <h2>Write Your Task</h2>
      </div>
      <div class="contact-form-wrapper">
        <form>
          <div class="form-item">
            <input type="text" name="title" value="{{ old('title') }}" required>
            <label>Title:</label>
          </div>
          <div class="form-item">
            <label>Description:</label>
            <textarea type="text"name="description">{{ old('description') }}</textarea>
          </div>
          <button class="submit-btn">Add Task</button>
            
          </div>
        
        </form>
      </div>
    </div>
  </section>
@endsection