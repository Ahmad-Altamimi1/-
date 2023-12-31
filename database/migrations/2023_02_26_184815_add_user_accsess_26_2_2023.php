<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserAccsess2622023 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->tinyInteger('B0')->default('0'); // user has accesses for only post videos and posts and tags 
            $table->tinyInteger('B1')->default('0'); // user has accesses for only post videos and posts 
            $table->tinyInteger('B2')->default('0'); // user has accesses for only programs
            $table->tinyInteger('B3')->default('0');
            $table->tinyInteger('B4')->default('0');
            $table->tinyInteger('B5')->default('0');
            $table->tinyInteger('B6')->default('0');
            $table->tinyInteger('B7')->default('0');
            $table->tinyInteger('B8')->default('0');
            $table->tinyInteger('B9')->default('0');
            $table->tinyInteger('B10')->default('0');
            $table->tinyInteger('B11')->default('0');
            $table->tinyInteger('B12')->default('0');
            $table->tinyInteger('B13')->default('0');
            $table->tinyInteger('B14')->default('0');
            $table->tinyInteger('B15')->default('0');
            $table->tinyInteger('B16')->default('0');
            $table->tinyInteger('B17')->default('0');
            $table->tinyInteger('B18')->default('0');
            $table->tinyInteger('B19')->default('0');
            $table->tinyInteger('B20')->default('0');
            $table->tinyInteger('B21')->default('0');
            $table->tinyInteger('B22')->default('0');
            $table->tinyInteger('B23')->default('0');
            $table->tinyInteger('B24')->default('0');
            $table->tinyInteger('B25')->default('0');
            $table->tinyInteger('B26')->default('0');
            $table->tinyInteger('B27')->default('0');
            $table->tinyInteger('B28')->default('0');
            $table->tinyInteger('B29')->default('0');
            $table->tinyInteger('B30')->default('0');
            $table->tinyInteger('B31')->default('0');
            $table->tinyInteger('B32')->default('0');
            $table->tinyInteger('B33')->default('0');
            $table->tinyInteger('B34')->default('0');
            $table->tinyInteger('B35')->default('0');
            $table->tinyInteger('B36')->default('0');
            $table->tinyInteger('B37')->default('0');
            $table->tinyInteger('B38')->default('0');
            $table->tinyInteger('B39')->default('0');
            $table->tinyInteger('B40')->default('0');
            $table->tinyInteger('B41')->default('0');
            $table->tinyInteger('B42')->default('0');
            $table->tinyInteger('B43')->default('0');
            $table->tinyInteger('B44')->default('0');
            $table->tinyInteger('B45')->default('0');
            $table->tinyInteger('B46')->default('0');
            $table->tinyInteger('B47')->default('0');
            $table->tinyInteger('B48')->default('0');
            $table->tinyInteger('B49')->default('0');
            $table->tinyInteger('B50')->default('0');
            $table->tinyInteger('B51')->default('0');
            $table->tinyInteger('B52')->default('0');
            $table->tinyInteger('B53')->default('0');
            $table->tinyInteger('B54')->default('0');
            $table->tinyInteger('B55')->default('0');
            $table->tinyInteger('B56')->default('0');
            $table->tinyInteger('B57')->default('0');
            $table->tinyInteger('B58')->default('0');
            $table->tinyInteger('B59')->default('0');
            $table->tinyInteger('B60')->default('0');
            $table->tinyInteger('B61')->default('0');
            $table->tinyInteger('B62')->default('0');
            $table->tinyInteger('B63')->default('0');
            $table->tinyInteger('B64')->default('0');
            $table->tinyInteger('B65')->default('0');
            $table->tinyInteger('B66')->default('0');
            $table->tinyInteger('B67')->default('0');
            $table->tinyInteger('B68')->default('0');
            $table->tinyInteger('B69')->default('0');
            $table->tinyInteger('B70')->default('0');
            $table->tinyInteger('B71')->default('0');
            $table->tinyInteger('B72')->default('0');
            $table->tinyInteger('B73')->default('0');
            $table->tinyInteger('B74')->default('0');
            $table->tinyInteger('B75')->default('0');
            $table->tinyInteger('B76')->default('0');
            $table->tinyInteger('B77')->default('0');
            $table->tinyInteger('B78')->default('0');
            $table->tinyInteger('B79')->default('0');
            $table->tinyInteger('B80')->default('0');
            $table->tinyInteger('B81')->default('0');
            $table->tinyInteger('B82')->default('0');
            $table->tinyInteger('B83')->default('0');
            $table->tinyInteger('B84')->default('0');
            $table->tinyInteger('B85')->default('0');
            $table->tinyInteger('B86')->default('0');
            $table->tinyInteger('B87')->default('0');
            $table->tinyInteger('B88')->default('0');
            $table->tinyInteger('B89')->default('0');
            $table->tinyInteger('B90')->default('0');
            $table->tinyInteger('B91')->default('0');
            $table->tinyInteger('B92')->default('0');
            $table->tinyInteger('B93')->default('0');
            $table->tinyInteger('B94')->default('0');
            $table->tinyInteger('B95')->default('0');
            $table->tinyInteger('B96')->default('0');
            $table->tinyInteger('B97')->default('0');
            $table->tinyInteger('B98')->default('0');
            $table->tinyInteger('B99')->default('0');
            $table->tinyInteger('B100')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('B0');
            $table->dropColumn('B1');
            $table->dropColumn('B2');
            $table->dropColumn('B3');
            $table->dropColumn('B4');
            $table->dropColumn('B5');
            $table->dropColumn('B6');
            $table->dropColumn('B7');
            $table->dropColumn('B8');
            $table->dropColumn('B9');
            $table->dropColumn('B10');
            $table->dropColumn('B11');
            $table->dropColumn('B12');
            $table->dropColumn('B13');
            $table->dropColumn('B14');
            $table->dropColumn('B15');
            $table->dropColumn('B16');
            $table->dropColumn('B17');
            $table->dropColumn('B18');
            $table->dropColumn('B19');
            $table->dropColumn('B20');
            $table->dropColumn('B21');
            $table->dropColumn('B22');
            $table->dropColumn('B23');
            $table->dropColumn('B24');
            $table->dropColumn('B25');
            $table->dropColumn('B26');
            $table->dropColumn('B27');
            $table->dropColumn('B28');
            $table->dropColumn('B29');
            $table->dropColumn('B30');
            $table->dropColumn('B31');
            $table->dropColumn('B32');
            $table->dropColumn('B33');
            $table->dropColumn('B34');
            $table->dropColumn('B35');
            $table->dropColumn('B36');
            $table->dropColumn('B37');
            $table->dropColumn('B38');
            $table->dropColumn('B39');
            $table->dropColumn('B40');
            $table->dropColumn('B41');
            $table->dropColumn('B42');
            $table->dropColumn('B43');
            $table->dropColumn('B44');
            $table->dropColumn('B45');
            $table->dropColumn('B46');
            $table->dropColumn('B47');
            $table->dropColumn('B48');
            $table->dropColumn('B49');
            $table->dropColumn('B50');
            $table->dropColumn('B51');
            $table->dropColumn('B52');
            $table->dropColumn('B53');
            $table->dropColumn('B54');
            $table->dropColumn('B55');
            $table->dropColumn('B56');
            $table->dropColumn('B57');
            $table->dropColumn('B58');
            $table->dropColumn('B59');
            $table->dropColumn('B60');
            $table->dropColumn('B61');
            $table->dropColumn('B62');
            $table->dropColumn('B63');
            $table->dropColumn('B64');
            $table->dropColumn('B65');
            $table->dropColumn('B66');
            $table->dropColumn('B67');
            $table->dropColumn('B68');
            $table->dropColumn('B69');
            $table->dropColumn('B70');
            $table->dropColumn('B71');
            $table->dropColumn('B72');
            $table->dropColumn('B73');
            $table->dropColumn('B74');
            $table->dropColumn('B75');
            $table->dropColumn('B76');
            $table->dropColumn('B77');
            $table->dropColumn('B78');
            $table->dropColumn('B79');
            $table->dropColumn('B80');
            $table->dropColumn('B81');
            $table->dropColumn('B82');
            $table->dropColumn('B83');
            $table->dropColumn('B84');
            $table->dropColumn('B85');
            $table->dropColumn('B86');
            $table->dropColumn('B87');
            $table->dropColumn('B88');
            $table->dropColumn('B89');
            $table->dropColumn('B90');
            $table->dropColumn('B91');
            $table->dropColumn('B92');
            $table->dropColumn('B93');
            $table->dropColumn('B94');
            $table->dropColumn('B95');
            $table->dropColumn('B96');
            $table->dropColumn('B97');
            $table->dropColumn('B98');
            $table->dropColumn('B99');
            $table->dropColumn('B100');
        });
    }
}
