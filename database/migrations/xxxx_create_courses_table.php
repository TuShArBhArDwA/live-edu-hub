Schema::create('courses', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->text('description');
    $table->string('category')->nullable();
    $table->timestamps();
});
