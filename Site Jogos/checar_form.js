
/* verificação NOME */
$(function(){
    $("#form-test").on("submit",function(){
      nome_input = $("input[name='nome']");
  
      if(nome_input.val() == "" || nome_input.val() == null)
      {
        $("#erro-nome").html("O nome eh obrigatorio");
        return(false);
      }
  
      return(true);
    });
  });
  
  /* verificação EMAIL */
  $(function(){
    $("#form-test").on("submit",function(){
      email_input = $("input[name='email']");
  
      if(email_input.val() == "" || email_input.val() == null)
      {
        $("#erro-email").html("O email eh obrigatorio");
        return(false);
      }
  
      return(true);
    });
  });
  
  /* verificação DATA */
  $(function(){
    $("#form-test").on("submit",function(){
      dia_input = $("input[name='dia']");
  
      if(dia_input.val() == "" || dia_input.val() == null)
      {
        $("#erro-dia").html("Dia é obrigatório");
        return(false);
      }
  
      return(true);
    });
  });
  
  $(function(){
    $("#form-test").on("submit",function(){
      mes_input = $("input[name='mes']");
  
      if(mes_input.val() == "" || mes_input.val() == null)
      {
        $("#erro-mes").html("Mes é obrigatório");
        return(false);
      }
  
      return(true);
    });
  });
  
  $(function(){
    $("#form-test").on("submit",function(){
      ano_input = $("input[name='ano']");
  
      if(ano_input.val() == "" || ano_input.val() == null)
      {
        $("#erro-ano").html("Ano é obrigatório");
        return(false);
      }
  
      return(true);
    });
  });
  
  /* verificação TELEFONE */
  $(function(){
    $("#form-test").on("submit",function(){
      telefone_input = $("input[name='telefone']");
  
      if(telefone_input.val() == "" || telefone_input.val() == null)
      {
        $("#erro-telefone").html("Telefone é obrigatório");
        return(false);
      }
  
      return(true);
    });
  });
  
  /* verificação PREÇO */
  $(function(){
    $("#form-test").on("submit",function(){
      preco_input = $("input[name='preco']");
  
      if(preco_input.val() == "" || preco_input.val() == null)
      {
        $("#erro-preco").html("Preço é obrigatório");
        return(false);
      }
  
      return(true);
    });
  });
  