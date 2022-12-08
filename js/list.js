const addInput = document.querySelector('#add-task')//поле ввода задачи

const addBtn =  document.querySelector('#add-btn')//добавить задачу
const delTaskBtn  =  document.querySelector('#del-btn')//удалить задачу

const renameBtn = document.querySelector('.rename-task')//переименовать
const updateBtn = document.querySelector('.update-task')//подтвердить
const delBtn = document.querySelector('.del-task')//удалить

const newTasks = document.querySelector('.new-tasks')//поле с новыми заданиями

const taskAlert = document.querySelector('.input-alert') //поле вывода alert
const countMoney = document.querySelector('.header-coins-count')
let numberMoney = 0


delTaskBtn.addEventListener('click', () => { //функция удаления
    addInput.value = '' // обнуляем поле ввода
})
addBtn.addEventListener('click', (e)=> { // функция добавления задачи
    let todo = addInput.value //берем значение из поля ввода
    todo = todo.trim() // удаляем пробелы
    if (todo==''){ //если значение пустое
        taskAlert.textContent = 'Введите задачу!'        
    }else{ //запись задачи
        console.log(todo)
        addTodo(todo)
        addInput.value = ''
        updateTodo()
        taskAlert.textContent = ''        
    }


})
function addTodo(todo){ //функция создания задачи
    let todoTask  = ` 
                <form method="post" class="task" action="vendor/todo.php">
					<input type="text" id="added-task" name='to' disabled value="${todo}">
                    <input type="submit" name='todo' title='Закончить задачу' class="ready-task">
                    <div>
                        <input type="button" value="&#9997;" name='update' title='Редактировать задачу' class="update-task">
                        <input type="button" value="✏️" name='rename' title='Переимоновать задачу' class="rename-task">
                        <input type="button" value="❌" name='delete' title='Удалить задачу' class="del-task">
                    </div>
                </form>
                ` 
    newTasks.innerHTML += todoTask // добавляем в поле новых задач
}
function updateTodo(){ //функция изменения задачи
    let task  = document.querySelectorAll('.task') //берем массив с заданиями
    task.forEach((t) => { //проходимся по всем эелментам
        console.log(t.children)
        t.addEventListener('click', e =>{ //при нажатии на задание
            if(e.target.classList.contains('rename-task')){ //если кнопка изменения то
                console.log('rename') 
                if (t.children[0].disabled){ //если заблокировано поле ввода
                    t.children[0].disabled = false //разблокируем поле ввода
                }
            }
            else if(e.target.classList.contains('del-task')) {
                t.remove() //удаляем задачу
            }
            else if (e.target.classList.contains('update-task')){
                // console.log(t.children[0].disabled)
                // countMoney.textContent += 1
                if (t.children[0].disabled == false){
                    t.children[0].disabled = true
                    // countMoney.textContent += 1
                }
            }
        })
    }) 
}