Schema::create('lessons', function (Blueprint $table) {
    $table->id();
    $table->foreignId('course_id')->constrained()->onDelete('cascade');
    $table->string('title');
    $table->string('video_url');
    $table->timestamps();
});