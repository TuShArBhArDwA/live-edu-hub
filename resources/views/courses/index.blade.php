<x-app-layout>
    <h1>Courses</h1>
    <a href="{{ route('courses.create') }}">Create Course</a>
    <ul>
        @foreach($courses as $course)
            <li><a href="{{ route('courses.show', $course) }}">{{ $course->title }}</a></li>
        @endforeach
    </ul>
</x-app-layout>
