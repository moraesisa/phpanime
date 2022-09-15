<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista categoria</title>

</head>
<body>

    <table>
        <Tr>
            <th></th>
            <th>Id</th>
            <th>descricao</th>
            
        </Tr>

        <?php foreach ($model->rows as $item): ?>
        <Tr>
            <Td>
                <a href="/categoria/delete?id=<?= $item->id ?>">X</a>
            </Td>

            <td><?= $item->id ?></td>

            <Td>
                <a href="/categoria/form?id=<?= $item->id ?>"><?= $item->descricao ?></a>
            </Td>

    

        </Tr>
        <?php endforeach ?>

        
        <?php if (count ($model->rows) == 0): ?>
            <Tr>
                <td colspan="5">Nenhum registro encontrado. </td>
            </Tr>
        <?php endif ?>

        </table>
    
        </body>
</html>