<?php
/*===========================================================================================================*/
  function validaNome(string $nome) : bool{
    if(empty($nome)){
    setarMensagemErro('o nome não pode ser vazio, por favor preencha novemente!!');
      return false;
    }
    else if(strlen($nome) < 3){
      setarMensagemErro('o nome não pode conter menos que 3 caracteres, por favor preencha novemente!!');
      return false;
    }
    else if(strlen($nome) > 40){
      setarMensagemErro('o nome não pode conter mais que 40 caracteres, por favor preencha novemente!!');
      return false;
    }
    return true;
  }
/*===========================================================================================================*/
  function validaIdade(string $idade) : bool{
    if(!(is_numeric($idade))){
      setarMensagemErro('idade nao identificada, por favor preencha novemente!!');
      return false;
    }
    return true;
  }
