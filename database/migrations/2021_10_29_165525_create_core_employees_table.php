<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoreEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core_employees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->boolean('active');

            //Personal data
            $table->string('id_type', 4);
            $table->string('id_document', 50);
            $table->integer('id_sharp');
            $table->string('id_hcm');
            $table->string('name', 100);
            $table->date('date_entry');
            $table->string('id_position');
            $table->date('birthdate');

            //$table->foreignId('core_site_id')->constrained();

            //  //foreign keys to core
            //  $table->bigInteger('core_society_id');
            //  $table->bigInteger('core_position_id');
            //  $table->bigInteger('core_organizational_unit_id');
            //  $table->bigInteger('core_pa_sideline_id');
            //  $table->bigInteger('core_om_sideline_id');
            //  $table->bigInteger('core_vp_id');
            //  $table->bigInteger('core_regime_id');
            //  $table->bigInteger('core_subdivision_id');

            //  //foreign keys to benefits
            //  $table->bigInteger('ben_contract_id');
            //  $table->bigInteger('ben_agreement_id');

            //  //foreign keys to Show me the Money
            //  $table->bigInteger('core_bonus_type_id');
            //  $table->bigInteger('core_class_employee_id');
            //  $table->bigInteger('core_site_id');

            //Show me the money
            //  $table->integer('salary');
            //  $table->integer('performance_bonus');
            //  $table->integer('sponsor_ship');
            //  $table->integer('total_salary');
            //  $table->integer('variable_salary');
            //  $table->integer('anual_salary');
            //  $table->integer('legal_premium');
            //  $table->integer('extra_legal_premium');
            //  $table->integer('mrs');
            //  $table->integer('value_sti');
            //  $table->string('target', 5);
            //  $table->integer('target_bonus');
            //  $table->integer('total_anual_prepaid');
            //  $table->integer('total_benef_prepaid');
            //  $table->integer('month_prepaid');
            //  $table->integer('total_anual_product');
            //  $table->integer('month_product');
            //  $table->integer('total_anual_casino');
            //  $table->integer('month_casino');
            //  $table->integer('total_anual_route');
            //  $table->integer('month_route');
            //  $table->integer('total_study');
            //  $table->integer('total_benef_study');
            //  $table->integer('total_anual_study');
            //  $table->integer('aid_kopps');
            //  $table->integer('values_lti');
            //  $table->string('manual_lti', 20);
            //  $table->string('percentage_cr',20);
            //  $table->string('show_cr',20);
            //  $table->integer('total_values_sti');
            //  $table->integer('anual_benefit');
            //  $table->integer('month_education');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_employees');
    }
}
