<?php

 // Dados da Tabela de Inscrições
    $cols = array(
        is_language('SPECIAL RATES UNTIL AUGUST 30th, 2025', 'PRECIOS ESPECIALES HASTA EL 30 DE AGOSTO DE 2025', 'VALORES ESPECIAIS ATÉ 30 DE AGOSTO DE 2025'),
        is_language('FROM AUGUST 31st TO OCTOBER 30th, 2025', 'DEL 31 DE AGOSTO AL 30 DE OCTUBRE DE 2025', 'DE 31 DE AGOSTO A 30 DE OUTUBRO DE 2025'),
        is_language('FROM OCTOBER 31st, 2025 TO APRIL 6th, 2026', 'DEL 31 DE OCTUBRE DE 2025 AL 6 DE ABRIL DE 2026', 'DE 31 DE OUTUBRO DE 2025 A 06 DE ABRIL DE 2026'),
        is_language('On Site', 'En el sitio', 'No local'),
    );

    $table01 = array(
        [
            'category' => is_language('BRAVS Member', 'Médico miembro de Quite SBRV', 'Médico Sócio Quite SBRV'),
            is_language('SPECIAL RATES UNTIL AUGUST 30th, 2025', 'PRECIOS ESPECIALES HASTA EL 30 DE AGOSTO DE 2025', 'VALORES ESPECIAIS ATÉ 30 DE AGOSTO DE 2025') => 'R$ 1.620,00',
            is_language('FROM AUGUST 31st TO OCTOBER 30th, 2025', 'DEL 31 DE AGOSTO AL 30 DE OCTUBRE DE 2025', 'DE 31 DE AGOSTO A 30 DE OUTUBRO DE 2025') => 'R$ 2.300,00',
            is_language('FROM OCTOBER 31st, 2025 TO APRIL 6th, 2026', 'DEL 31 DE OCTUBRE DE 2025 AL 6 DE ABRIL DE 2026', 'DE 31 DE OUTUBRO DE 2025 A 06 DE ABRIL DE 2026') => 'R$ 2.600,00',
            is_language('On Site', 'En el sitio', 'No local') => 'R$ 2.900,00',
        ],
        [
            'category' => is_language('Physician Over 70 Years Old, BRAVS Member For More Than 10 Years <br> (born on or before December 31st, 1955) (*) (**)', 'Médico mayor de 70 años, miembro activo del SBRV desde hace más de 10 años (nacido antes del 31 de diciembre de 1955) (*) (**)', 'Médico Acima de 70 Anos Sócio Quite SBRV Há Mais de 10 Anos <br> (nascido até 31 de Dezembro de 1955) (*) (**)'),
            is_language('SPECIAL RATES UNTIL AUGUST 30th, 2025', 'PRECIOS ESPECIALES HASTA EL 30 DE AGOSTO DE 2025', 'VALORES ESPECIAIS ATÉ 30 DE AGOSTO DE 2025') => is_language('Free Registration', 'Registro gratuito', 'Registro Gratuito'),
            is_language('FROM AUGUST 31st TO OCTOBER 30th, 2025', 'DEL 31 DE AGOSTO AL 30 DE OCTUBRE DE 2025', 'DE 31 DE AGOSTO A 30 DE OUTUBRO DE 2025') => is_language('Free Registration', 'Registro gratuito', 'Registro Gratuito'),
            is_language('FROM OCTOBER 31st, 2025 TO APRIL 6th, 2026', 'DEL 31 DE OCTUBRE DE 2025 AL 6 DE ABRIL DE 2026', 'DE 31 DE OUTUBRO DE 2025 A 06 DE ABRIL DE 2026') => is_language('Free Registration', 'Registro gratuito', 'Registro Gratuito'),
            is_language('On Site', 'En el sitio', 'No local') => is_language('Free Registration', 'Registro gratuito', 'Registro Gratuito'),
        ],
        [
            'category' => is_language('Foreign Physician <br> (non-brazilian)', 'Médico extranjero (no brasileño)', 'Médico Estrangeiro <br> (Não Brasileiro)'),
            is_language('SPECIAL RATES UNTIL AUGUST 30th, 2025', 'PRECIOS ESPECIALES HASTA EL 30 DE AGOSTO DE 2025', 'VALORES ESPECIAIS ATÉ 30 DE AGOSTO DE 2025') => 'R$ 1.620,00',
            is_language('FROM AUGUST 31st TO OCTOBER 30th, 2025', 'DEL 31 DE AGOSTO AL 30 DE OCTUBRE DE 2025', 'DE 31 DE AGOSTO A 30 DE OUTUBRO DE 2025') => 'R$ 2.300,00',
            is_language('FROM OCTOBER 31st, 2025 TO APRIL 6th, 2026', 'DEL 31 DE OCTUBRE DE 2025 AL 6 DE ABRIL DE 2026', 'DE 31 DE OUTUBRO DE 2025 A 06 DE ABRIL DE 2026') => 'R$ 2.600,00',
            is_language('On Site', 'En el sitio', 'No local') => 'R$ 2.900,00',
        ],
        [
            'category' => is_language('Non Member', 'Médico no miembro', 'Médico Não Sócio'),
            is_language('SPECIAL RATES UNTIL AUGUST 30th, 2025', 'PRECIOS ESPECIALES HASTA EL 30 DE AGOSTO DE 2025', 'VALORES ESPECIAIS ATÉ 30 DE AGOSTO DE 2025') => 'R$ 3.550,00',
            is_language('FROM AUGUST 31st TO OCTOBER 30th, 2025', 'DEL 31 DE AGOSTO AL 30 DE OCTUBRE DE 2025', 'DE 31 DE AGOSTO A 30 DE OUTUBRO DE 2025') => 'R$ 4.600,00',
            is_language('FROM OCTOBER 31st, 2025 TO APRIL 6th, 2026', 'DEL 31 DE OCTUBRE DE 2025 AL 6 DE ABRIL DE 2026', 'DE 31 DE OUTUBRO DE 2025 A 06 DE ABRIL DE 2026') => 'R$ 5.200,00',
            is_language('On Site', 'En el sitio', 'No local') => 'R$ 5.800,00',
        ],
        [
            'category' => is_language('Newly Graduated Retina Fellow <br> (up to 24 months after conclusion) (*)', 'Becario de Retina recién graduado <br>(hasta 24 meses después de la finalización) (*)', 'Fellow de Retina Recém-formado <br> (até 24 meses após a conclusão) (*)'),
            is_language('SPECIAL RATES UNTIL AUGUST 30th, 2025', 'PRECIOS ESPECIALES HASTA EL 30 DE AGOSTO DE 2025', 'VALORES ESPECIAIS ATÉ 30 DE AGOSTO DE 2025') => 'R$ 1.510,00',
            is_language('FROM AUGUST 31st TO OCTOBER 30th, 2025', 'DEL 31 DE AGOSTO AL 30 DE OCTUBRE DE 2025', 'DE 31 DE AGOSTO A 30 DE OUTUBRO DE 2025') => 'R$ 1.600,00',
            is_language('FROM OCTOBER 31st, 2025 TO APRIL 6th, 2026', 'DEL 31 DE OCTUBRE DE 2025 AL 6 DE ABRIL DE 2026', 'DE 31 DE OUTUBRO DE 2025 A 06 DE ABRIL DE 2026') => 'R$ 1.900,00',
            is_language('On Site', 'En el sitio', 'No local') => 'R$ 2.100,00',
        ],
        [
            'category' => is_language('Retina Fellow (*)', 'Becario Retina (*)', 'Fellow de Retina (*)'),
            is_language('SPECIAL RATES UNTIL AUGUST 30th, 2025', 'PRECIOS ESPECIALES HASTA EL 30 DE AGOSTO DE 2025', 'VALORES ESPECIAIS ATÉ 30 DE AGOSTO DE 2025') => 'R$ 1.135,00',
            is_language('FROM AUGUST 31st TO OCTOBER 30th, 2025', 'DEL 31 DE AGOSTO AL 30 DE OCTUBRE DE 2025', 'DE 31 DE AGOSTO A 30 DE OUTUBRO DE 2025') => 'R$ 1.400,00',
            is_language('FROM OCTOBER 31st, 2025 TO APRIL 6th, 2026', 'DEL 31 DE OCTUBRE DE 2025 AL 6 DE ABRIL DE 2026', 'DE 31 DE OUTUBRO DE 2025 A 06 DE ABRIL DE 2026') => 'R$ 1.600,00',
            is_language('On Site', 'En el sitio', 'No local') => 'R$ 1.800,00',
        ],
        [
            'category' => is_language('Medical Resident (*)', 'Médico residente (*)', 'Residente de Medicina (*)'),
            is_language('SPECIAL RATES UNTIL AUGUST 30th, 2025', 'PRECIOS ESPECIALES HASTA EL 30 DE AGOSTO DE 2025', 'VALORES ESPECIAIS ATÉ 30 DE AGOSTO DE 2025') => 'R$ 905,00',
            is_language('FROM AUGUST 31st TO OCTOBER 30th, 2025', 'DEL 31 DE AGOSTO AL 30 DE OCTUBRE DE 2025', 'DE 31 DE AGOSTO A 30 DE OUTUBRO DE 2025') => 'R$ 1.100,00',
            is_language('FROM OCTOBER 31st, 2025 TO APRIL 6th, 2026', 'DEL 31 DE OCTUBRE DE 2025 AL 6 DE ABRIL DE 2026', 'DE 31 DE OUTUBRO DE 2025 A 06 DE ABRIL DE 2026') => 'R$ 1.300,00',
            is_language('On Site', 'En el sitio', 'No local') => 'R$ 1.500,00',
        ],
        [
            'category' => is_language('Student Medical (*)', 'Estudiante de Medicina (*)', 'Estudante de Medicina (*)'),
            is_language('SPECIAL RATES UNTIL AUGUST 30th, 2025', 'PRECIOS ESPECIALES HASTA EL 30 DE AGOSTO DE 2025', 'VALORES ESPECIAIS ATÉ 30 DE AGOSTO DE 2025') => 'R$ 793,00',
            is_language('FROM AUGUST 31st TO OCTOBER 30th, 2025', 'DEL 31 DE AGOSTO AL 30 DE OCTUBRE DE 2025', 'DE 31 DE AGOSTO A 30 DE OUTUBRO DE 2025') => 'R$ 990,00',
            is_language('FROM OCTOBER 31st, 2025 TO APRIL 6th, 2026', 'DEL 31 DE OCTUBRE DE 2025 AL 6 DE ABRIL DE 2026', 'DE 31 DE OUTUBRO DE 2025 A 06 DE ABRIL DE 2026') => 'R$ 1.100,00',
            is_language('On Site', 'En el sitio', 'No local') => 'R$ 1.200,00',
        ],
    );

    // Fim tabela de inscrições

?>

<table class="c-responsive-table text-white w-full">
    <thead>
        <tr>
            <th class="w-[16.6px] bg-[#E9E9E9] text-primary uppercase font-bold text-lg rounded-t-lg"> <?= is_language('Category', 'Categoria'); ?> </th>
            <?php foreach ($cols as $key => $col) : ?>
            <th class="w-[16.6px] align-bottom p-0 text-center cat<?= $key+1 ?> small cursor-pointer relative h-1 text-white" data-label-hover="Register now">
                <div class="bg-primary ms-auto py-3 rounded-t-lg flex items-center justify-center h-full w-[85%] px-5 <?= ($key == 1)? 'font-bold' : '';?>" data-label-hover="Register now"> 
                    <?= $col; ?> 
                </div>
            </th>
            <?php endforeach; ?>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($table01 as $row): ?>
        <tr class="bg-gray-100 text-primary nth-of-type-[2n]:bg-white nth-of-type-[2n]:text-dark max-xl:mb-12 relative z-10 lg:last:[&>td>div]:border-b-2">
            <td class="p-3 text-center font-bold text-sm" data-label="CATEGORIA"> <?= $row['category']; ?> </td>
            <?php foreach ($cols as $i => $col): ?>
            <td class="cat<?= $i+1; ?> lg:h-1" 
                data-label="<?= str_replace('<br>', " - ", $col); ?>">
                <div class="ms-auto h-full py-3 flex items-center justify-end lg:justify-center w-[85%] px-5 text-center lg:border-x-2 lg:border-primary <?= ($key == 1)? 'font-bold' : '';?>" data-label-hover="Register now"> 
                    <?= $row[$col]; ?>
                </div>
            </td>
            <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>
        
    </tbody>
</table>

<?php /*
<div class="mb-8">
    <p class="mb-0"> (*) <?= is_language('It is mandatory to present proof of category', 'Obrigatório apresentar comprovante de categoria') ;?> </p>
    <p class="m-0"> (**) <?= is_language('If you would like to pay for your registration and contribute to BRAVS, please send an email to', 'Caso você queira pagar sua inscrição e contribuir com a SBRV, favor enviar um e-mail para:'); ?> <a href="mailto:janice@atepeventos.com.br" target="_blank" rel="noopener noreferrer" class="underline text-primary"> janice@atepeventos.com.br </a> </p>
</div>

<?php if(pll_current_language() == 'en'): ?>
    <p>Rates are listed in Brazilian Real. The charge on your credit card will be in the local currency: Real/BRL/R$ (Brazilian Real). <a href=" https://www.xe.com/currencyconverter/convert/?Amount=1&From=BRL&To=USD" target="_blank" rel="noopener noreferrer" class="underline text-primary"> Click here </a> to to see the equivalent registration fee in your currency.</p>
<?php endif; ?>

*/ ?>