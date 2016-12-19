$(document).ready(FUNCTION() { // Ждём загрузки страницы
$(".popup_bg").click(FUNCTION(){    // Событие клика на затемненный фон      
$(".popup").fadeOut(800);    // Медленно убираем всплывающее окно
});
});
FUNCTION showPopup() {
$(".popup").fadeIn(800); // Медленно выводим изображение
}