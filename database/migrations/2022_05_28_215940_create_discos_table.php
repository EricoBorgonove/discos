<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo',20);
            $table->text('artista');
            $table->string('vinil',2);
            $table->text('titulo');
            $table->string('ano',4);
            $table->string('genero',20);
            $table->string('selo',20);
            $table->string('tamanho',2);
            $table->string('rotacoes',2);
            $table->text('especificacao');
            $table->string('condisco',20);
            $table->string('concapa');
            $table->text('especestado');
            $table->string('estante',2);
            $table->string('nicho',2);

            $table->timestamps();
        });
    }

                    // ID 
                    // Tipo – álbum(padrão), trilha novela, trilha filme, coletânea, hits, outro 
                    // Artista(s); 
                    // Discos 1(Padrão), 2, 3 ,4 ,5 ,6 
                    // Título ou Álbum; 
                    // Ano de lançamento; 
                    // Gênero; 
                    // Selo; 
                    // Tamanho do LP – 7, 10, 12(Padrão) polegadas; 
                    // Rotações 33(Padrão), 45, 78; 
                    // especificações da edição; 
                    // condição do disco – novo, pouco riscado, muito riscado, quebrado 
                    // Condição da capa – nova, boa, ruim, péssima, sem capa 
                    // Especificações do estado (texto) 
                    // Estante 1 (padrão), 2 
                    // Nicho 1,2,3,4,5,6,7,8,9,10

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discos');
    }
};
