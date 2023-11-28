<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tarefas;

class TarefasController extends Controller
{
    /**
     * Exibir uma listagem das tarefas.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarefas = Tarefas::paginate(8);
        return view('tarefas', compact('tarefas'));
    }

    /**
     * Mostrar o formulário para criar uma nova tarefa.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastrarTarefa');
    }

    /**
     * Armazenar uma tarefa recém-criada no banco de dados.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras = [
            'titulo' => 'required',
            'descricao' => 'required'
        ];

        $mensagens = [
            'titulo.required' => 'Por favor, informe o título da tarefa.',
            'descricao.required' => 'Por favor, informe a descrição da tarefa.'
        ];

        $request->validate($regras, $mensagens);
        
        $tarefa = new Tarefas();
        $tarefa->titulo = $request->input('titulo');
        $tarefa->descricao = $request->input('descricao');
        $tarefa->save();
        $request->session()->flash('message', 'Tarefa criada com sucesso!');
        return redirect('/tarefas');
    }

    /**
     * Mostrar o formulário para editar uma tarefa especificada.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarefa = Tarefas::findOrFail($id);
        if(isset($tarefa)){
            return view('editarTarefa', compact('tarefa'));
        }
    }

    /**
     * Atualiza uam tarefa especificada no banco de dados.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tarefa = Tarefas::findOrFail($id);
        if(isset($tarefa)){
            $tarefa->titulo = $request->input('titulo');
            $tarefa->descricao = $request->input('descricao');
            $tarefa->save();
            $request->session()->flash('message', 'Tarefa atualizada com sucesso!');
        }
        return redirect('/tarefas');
    }

    /**
     * Remover uma tarefa especificada do banco de dados.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $tarefa = Tarefas::findOrFail($id);
        if(isset($tarefa)){
            $tarefa->delete();
            $request->session()->flash('message', 'Tarefa excluída com sucesso!');
        }
        return redirect('/tarefas');
    }
}
