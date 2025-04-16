<x-app-layout>
    <h1>{{ $course->title }}</h1>
    <p>{{ $course->description }}</p>
    <h3>Lessons</h3>
    <ul>
        @foreach($course->lessons as $lesson)
            <li>{{ $lesson->title }} - <a href="{{ $lesson->video_url }}" target="_blank">Watch</a></li>
        @endforeach
    </ul>
</x-app-layout>
