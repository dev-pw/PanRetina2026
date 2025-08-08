<?php

 // Dados da Tabela de Inscrições
    $cols = array(
        is_language_en('SPECIAL RATES UNTIL AUGUST 30th, 2025 (CBO CONGRESS)', 'VALORES ESPECIAIS ATÉ 30 DE AGOSTO DE 2025 (CONGRESSO CBO)'),
        is_language_en('FROM AUGUST 31st TO OCTOBER 30th, 2025', 'DE 31 DE AGOSTO A 30 DE OUTUBRO DE 2025'),
        is_language_en('FROM OCTOBER 31st, 2025 TO APRIL 6th, 2026', 'DE 31 DE OUTUBRO DE 2025 A 06 DE ABRIL DE 2026'),
        is_language_en('On Site', 'No local'),
    );

    $table01 = array(
        [
            'category' => is_language_en('BRAVS Member', 'Médico Sócio Quite SBRV'),
            is_language_en('SPECIAL RATES UNTIL AUGUST 30th, 2025 (CBO CONGRESS)', 'VALORES ESPECIAIS ATÉ 30 DE AGOSTO DE 2025 (CONGRESSO CBO)') => 'R$ 1.620,00',
            is_language_en('FROM AUGUST 31st TO OCTOBER 30th, 2025', 'DE 31 DE AGOSTO A 30 DE OUTUBRO DE 2025') => 'R$ 2.300,00',
            is_language_en('FROM OCTOBER 31st, 2025 TO APRIL 6th, 2026', 'DE 31 DE OUTUBRO DE 2025 A 06 DE ABRIL DE 2026') => 'R$ 2.600,00',
            is_language_en('On Site', 'No local') => 'R$ 2.900,00',
        ],
        [
            'category' => is_language_en('Physician Over 70 Years Old, BRAVS Member For More Than 10 Years <br> (born on or before December 31st, 1955) (*) (**)','Médico Acima de 70 Anos Sócio Quite SBRV Há Mais de 10 Anos <br> (nascido até 31 de Dezembro de 1955) (*) (**) '),
            is_language_en('SPECIAL RATES UNTIL AUGUST 30th, 2025 (CBO CONGRESS)', 'VALORES ESPECIAIS ATÉ 30 DE AGOSTO DE 2025 (CONGRESSO CBO)') => is_language_en('Free Registration', 'Registro Gratuito'),
            is_language_en('FROM AUGUST 31st TO OCTOBER 30th, 2025', 'DE 31 DE AGOSTO A 30 DE OUTUBRO DE 2025') => is_language_en('Free Registration', 'Registro Gratuito'),
            is_language_en('FROM OCTOBER 31st, 2025 TO APRIL 6th, 2026', 'DE 31 DE OUTUBRO DE 2025 A 06 DE ABRIL DE 2026') => is_language_en('Free Registration', 'Registro Gratuito'),
            is_language_en('On Site', 'No local') => is_language_en('Free Registration', 'Registro Gratuito'),
        ],
        [
            'category' => is_language_en('Foreign Physician <br> (non-brazilian)', 'Médico Estrangeiro <br> (Não Brasileiro)'),
            is_language_en('SPECIAL RATES UNTIL AUGUST 30th, 2025 (CBO CONGRESS)', 'VALORES ESPECIAIS ATÉ 30 DE AGOSTO DE 2025 (CONGRESSO CBO)') => 'R$ 1.620,00',
            is_language_en('FROM AUGUST 31st TO OCTOBER 30th, 2025', 'DE 31 DE AGOSTO A 30 DE OUTUBRO DE 2025') => 'R$ 2.300,00',
            is_language_en('FROM OCTOBER 31st, 2025 TO APRIL 6th, 2026', 'DE 31 DE OUTUBRO DE 2025 A 06 DE ABRIL DE 2026') => 'R$ 2.600,00',
            is_language_en('On Site', 'No local') => 'R$ 2.900,00',
        ],
        [
            'category' => is_language_en('Non Member', 'Médico Não Sócio'),
            is_language_en('SPECIAL RATES UNTIL AUGUST 30th, 2025 (CBO CONGRESS)', 'VALORES ESPECIAIS ATÉ 30 DE AGOSTO DE 2025 (CONGRESSO CBO)') => 'R$ 3.550,00',
            is_language_en('FROM AUGUST 31st TO OCTOBER 30th, 2025', 'DE 31 DE AGOSTO A 30 DE OUTUBRO DE 2025') => 'R$ 4.600,00',
            is_language_en('FROM OCTOBER 31st, 2025 TO APRIL 6th, 2026', 'DE 31 DE OUTUBRO DE 2025 A 06 DE ABRIL DE 2026') => 'R$ 5.200,00',
            is_language_en('On Site', 'No local') => 'R$ 5.800,00',
        ],
        [
            'category' => is_language_en('Newly Graduated Retina Fellow <br> (up to 24 months after conclusion) (*)', 'Fellow de Retina Recém-formado <br> (até 24 meses após a conclusão) (*) '),
            is_language_en('SPECIAL RATES UNTIL AUGUST 30th, 2025 (CBO CONGRESS)', 'VALORES ESPECIAIS ATÉ 30 DE AGOSTO DE 2025 (CONGRESSO CBO)') => 'R$ 1.510,00',
            is_language_en('FROM AUGUST 31st TO OCTOBER 30th, 2025', 'DE 31 DE AGOSTO A 30 DE OUTUBRO DE 2025') => 'R$ 1.600,00',
            is_language_en('FROM OCTOBER 31st, 2025 TO APRIL 6th, 2026', 'DE 31 DE OUTUBRO DE 2025 A 06 DE ABRIL DE 2026') => 'R$ 1.900,00',
            is_language_en('On Site', 'No local') => 'R$ 2.100,00',
        ],
        [
            'category' => is_language_en('Retina Fellow (*)', 'Fellow de Retina (*)'),
            is_language_en('SPECIAL RATES UNTIL AUGUST 30th, 2025 (CBO CONGRESS)', 'VALORES ESPECIAIS ATÉ 30 DE AGOSTO DE 2025 (CONGRESSO CBO)') => 'R$ 1.135,00',
            is_language_en('FROM AUGUST 31st TO OCTOBER 30th, 2025', 'DE 31 DE AGOSTO A 30 DE OUTUBRO DE 2025') => 'R$ 1.400,00',
            is_language_en('FROM OCTOBER 31st, 2025 TO APRIL 6th, 2026', 'DE 31 DE OUTUBRO DE 2025 A 06 DE ABRIL DE 2026') => 'R$ 1.600,00',
            is_language_en('On Site', 'No local') => 'R$ 1.800,00',
        ],
        [
            'category' => is_language_en('Medical Resident (*)', 'Residente de Medicina (*)'),
            is_language_en('SPECIAL RATES UNTIL AUGUST 30th, 2025 (CBO CONGRESS)', 'VALORES ESPECIAIS ATÉ 30 DE AGOSTO DE 2025 (CONGRESSO CBO)') => 'R$ 905,00',
            is_language_en('FROM AUGUST 31st TO OCTOBER 30th, 2025', 'DE 31 DE AGOSTO A 30 DE OUTUBRO DE 2025') => 'R$ 1.100,00',
            is_language_en('FROM OCTOBER 31st, 2025 TO APRIL 6th, 2026', 'DE 31 DE OUTUBRO DE 2025 A 06 DE ABRIL DE 2026') => 'R$ 1.300,00',
            is_language_en('On Site', 'No local') => 'R$ 1.500,00',
        ],
        [
            'category' => is_language_en('Student Medical (*)', 'Estudante de Medicina (*)'),
            is_language_en('SPECIAL RATES UNTIL AUGUST 30th, 2025 (CBO CONGRESS)', 'VALORES ESPECIAIS ATÉ 30 DE AGOSTO DE 2025 (CONGRESSO CBO)') => 'R$ 793,00',
            is_language_en('FROM AUGUST 31st TO OCTOBER 30th, 2025', 'DE 31 DE AGOSTO A 30 DE OUTUBRO DE 2025') => 'R$ 990,00',
            is_language_en('FROM OCTOBER 31st, 2025 TO APRIL 6th, 2026', 'DE 31 DE OUTUBRO DE 2025 A 06 DE ABRIL DE 2026') => 'R$ 1.100,00',
            is_language_en('On Site', 'No local') => 'R$ 1.200,00',
        ],
    );

    // Fim tabela de inscrições

?>

<table class="c-responsive-table text-white w-full">
    <thead>
        <tr>
            <th class="w-[16.6px] bg-[#E9E9E9] text-primary uppercase font-bold text-lg"> <?= is_language_en('Category', 'Categoria'); ?> </th>
            <?php foreach ($cols as $key => $col) : ?>
            <th class="w-[16.6px] align-bottom p-0 text-center cat<?= $key+1 ?> bg-[#006EB4] text-white border-x-2 border-[#E9E9E9] <?= ($key == 1)? 'font-bold' : '';?>" data-label-hover="Register now">
                <div class="p-3 text-lg flex items-center justify-center min-h-[120px] uppercase" data-label-hover="Register now"> 
                    <?= $col; ?> 
                </div>
            </th>
            <?php endforeach; ?>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($table01 as $row): ?>
        <tr class="bg-gray-300 text-primary nth-of-type-[2n]:bg-primary nth-of-type-[2n]:text-white mb-12 xl:mb-0 relative z-10">
            <td class="p-3 text-center font-bold text-sm lg:border-r-2 lg:border-[#E9E9E9]" data-label="CATEGORIA"> <?= $row['category']; ?> </td>
            <?php foreach ($cols as $i => $col): ?>
            <td class="cat<?= $i+1; ?> p-4 text-center lg:not-last:border-r-2 lg:not-last:border-[#E9E9E9]" 
                data-label="<?= str_replace('<br>', " - ", $col); ?>">
                <?= $row[$col]; ?>
            </td>
            <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>
        
    </tbody>
</table>

<div class="mb-8">
    <p class="mb-0"> (*) <?= is_language_en('It is mandatory to present proof of category', 'Obrigatório apresentar comprovante de categoria') ;?> </p>
    <p class="m-0"> (**) <?= is_language_en('If you would like to pay for your registration and contribute to BRAVS, please send an email to', 'Caso você queira pagar sua inscrição e contribuir com a SBRV, favor enviar um e-mail para:'); ?> <a href="mailto:janice@atepeventos.com.br" target="_blank" rel="noopener noreferrer" class="underline text-primary"> janice@atepeventos.com.br </a> </p>
</div>

<?php if(pll_current_language() == 'en'): ?>
    <p>Rates are listed in Brazilian Real. The charge on your credit card will be in the local currency: Real/BRL/R$ (Brazilian Real). <a href=" https://www.xe.com/currencyconverter/convert/?Amount=1&From=BRL&To=USD" target="_blank" rel="noopener noreferrer" class="underline text-primary"> Click here </a> to to see the equivalent registration fee in your currency.</p>
<?php endif; ?>