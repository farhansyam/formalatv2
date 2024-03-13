<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePAC extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PACS', function (Blueprint $table) {
            $table->id();
            $table->text('q1');
            $table->text('q2');
            $table->text('q3');
            $table->text('q4');
            $table->text('q5');
            $table->text('q6');
            $table->text('q7');
            $table->text('q8');
            $table->text('q9');
            $table->text('q10');
            $table->text('q11');
            $table->text('q12');
            $table->text('q13');
            $table->text('q14');
            $table->text('q15');
            $table->text('q16');
            $table->text('q17');
            $table->text('q18');
            $table->text('q19');
            $table->text('q20');
            $table->text('q21');
            $table->text('q22');
            $table->text('q23');
            $table->text('q24');
            $table->text('q25');
            $table->text('q26');
            $table->text('q27');
            $table->text('q28');
            $table->text('q29');
            $table->text('q30');
            $table->text('q31');
            $table->text('q32');
            $table->text('q33');
            $table->text('q34');
            $table->text('q35');
            $table->text('q36');
            $table->text('q37');
            $table->text('q38');
            $table->text('q39');
            $table->text('q40');
            $table->text('q41');
            $table->text('q42');
            $table->text('q43');
            $table->text('q44');
            $table->text('q45');
            $table->text('q46');
            $table->text('q47');
            $table->text('q48');
            $table->text('q49');
            $table->text('q50');
            $table->text('q51');
            $table->text('q52');
            $table->text('q53');
            $table->text('q54');
            $table->text('q55');
            $table->text('q56');
            $table->text('q57');
            $table->text('q58');
            $table->text('q59');
            $table->text('q60');
            $table->text('q61');
            $table->text('q62');
            $table->text('q63');
            $table->text('q64');
            $table->text('q65');
            $table->text('q66');
            $table->text('q67');
            $table->text('q68');
            $table->text('q69');
            $table->text('q70');
            $table->text('q71');
            $table->text('q72');
            $table->text('q73');
            $table->text('q74');
            $table->text('q75');
            $table->text('q76');
            $table->text('q77');
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
        Schema::dropIfExists('PACS');
    }
}
