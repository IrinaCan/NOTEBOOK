"Notebook"  - небольшое приложение, сделанное на Laravel, представляющее собой простой CRUD. 

Содержит следующие маршруты:

1) Route::get('/index', [NotebookController::class, 'index']);
   возвращает все хранимые записи с применением пагинации или сообщение "не найдено"
   
2) Route::post('/store', [NotebookController::class, 'store']);
   принимает данные для сохранения одной новой записи, возвращает сообщение "добавлено"/"ошибка"
    
3) Route::get('/show/{id}', [NotebookController::class, 'show']);
   принимает параметром идентификатор, возвращает запрошенную хранимую запись или сообщение "не найдено"
    
4) Route::put('/update', [NotebookController::class, 'update']);
   принимает изменённые данные полученной хранимой записи для обновления, возвращает сообщение "обновлено"/"ошибка"
   
5) Route::delete('/destroy/{id}', [NotebookController::class, 'destroy']); 
   принимает параметром идентификатор записи для удаления, возвращает сообщение "удалено"/"ошибка"

   Ответы возвращаются в формате JSON.

   Сохранение полученных файлов настроено в папку public/image вместо папки storage, в базу данных добавляется путь и имя файла.
   
   Приложение содержит функциональные тесты в папке tests/Feature.

   Дамп - файл базы данных db_notebook.sql, таблица наполнена фейковыми данными с использованием Factory.

   CSRF - токены отключены.

   Файл configSERVER.txt содержит информацию по настройке локального сервера Apache в сборке XAMPP.

    
