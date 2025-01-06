"use strict";

document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.c-btn__accordion');

    buttons.forEach((button) => {
        button.addEventListener('click', () => {
            const ul = button.nextElementSibling; // ボタンの次の兄弟要素を取得
            if (ul && ul.style) {
                ul.style.height = ul.style.height === 'auto' ? '0' : 'auto';
            } else {
                console.error("対象の要素が見つかりません");
            }
        });
    });
});

  