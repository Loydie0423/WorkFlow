<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies');
            $table->foreignId('employer_id')->constrained('employers');
            $table->foreignId('job_category_id')->constrained('job_categories');
            $table->string('title');
            $table->string('location');
            $table->enum('arrangement', array('Onsite','Work From Home','Hybrid'));
            $table->string('description');
            $table->decimal('min_salary',10,2);
            $table->decimal('max_salary',10,2);
            $table->enum('status', array('Pending','Approved', 'Closed'))->default('Pending');
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
