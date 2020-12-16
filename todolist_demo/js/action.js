$(document).ready(function(){
    <!--變數放事項的模板-->
    var source = $('#todolist-item-template').html();
    var todoTemplate = Handlebars.compile(source);
    
    <!--當點擊空白處則添加事項-->
    $('.new').find('.new_content').on('blur', function(){
        var todo = $(this).text();
        todo = todo.trim();

        todo = {
            is_complete: false,
            content: todo
        };
        var li = todoTemplate(todo);

        if(todo.content){
            $(this).closest('li').before(li);
            $(this).html('Click to add new task...');
        }else{
            $(this).html('Click to add new task...');
        }
    })
    <!--點擊新增事項-->
    $('.new').find('.new_content').on('focus', function(){
        $(this).html('');
    })
    <!--點擊叉叉刪除事項-->
    $('#todolist').on('click', '.delete', function(){
        var result = confirm('Are you sure you want to delete?');
        if(result){
            $(this).closest('li').remove();
        }
    })
    <!--點擊Checkbox完成事項-->
    $('#todolist').on('click', '.checkbox', function(){
        var isComplete = $(this).closest('li').hasClass('complete');
        if(isComplete){
            $(this).text('');
            $(this).closest('li').removeClass('complete');
        }else{
            $(this).text('V');
            $(this).closest('li').addClass('complete');
        }
    })
    <!--雙擊可編輯事項-->
    $('#todolist')
    .on('dblclick', '.content', function(){
        $(this).prop('contenteditable', true).focus();
    })
    .on('blur', '.content', function(){
        $(this).prop('contenteditable', false);
    })
    <!--事項可拖拉-->
    $('#todolist').find('ul').sortable({
        items: 'li:not(.new)'
    });
});

function isEmpty(el){
    return !$.trim(el.html());
};