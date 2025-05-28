$(document).ready(function () {
  // Formação Acadêmica
  $('#addFormacao').click(function () {
    $('#formacoes').append(`
      <div class="flex items-center gap-2 my-2">
        <input type="text" name="formacao[]" class="w-full p-2 border rounded" required>
        <button type="button" class="remove-formacao w-8 h-8 flex items-center justify-center bg-red-500 text-white font-bold rounded">❌</button>
      </div>
    `);
  });

  $(document).on('click', '.remove-formacao', function () {
    $(this).parent().remove();
  });

  // Experiência Profissional
  $('#addExp').click(function () {
    $('#experiencias').append(`
      <div class="flex items-center gap-2 my-2">
        <input type="text" name="experiencia[]" class="w-full p-2 border rounded" required>
        <button type="button" class="remove-exp w-8 h-8 flex items-center justify-center bg-red-500 text-white font-bold rounded">❌</button>
      </div>
    `);
  });

  $(document).on('click', '.remove-exp', function () {
    $(this).parent().remove();
  });

  // Habilidades
  $('#addHabilidade').click(function () {
    $('#habilidades').append(`
      <div class="flex items-center gap-2 my-2">
        <input type="text" name="habilidades[]" class="w-full p-2 border rounded" required>
        <button type="button" class="remove-hab w-8 h-8 flex items-center justify-center bg-red-500 text-white font-bold rounded">❌</button>
      </div>
    `);
  });

  $(document).on('click', '.remove-hab', function () {
    $(this).parent().remove();
  });

  // Cálculo da Idade
  $('#nascimento').on('change', function () {
    const nascimento = new Date($(this).val());
    const hoje = new Date();
    let idade = hoje.getFullYear() - nascimento.getFullYear();
    const m = hoje.getMonth() - nascimento.getMonth();

    if (m < 0 || (m === 0 && hoje.getDate() < nascimento.getDate())) {
      idade--;
    }

    $('#idade').val(idade + ' anos');
  });
});