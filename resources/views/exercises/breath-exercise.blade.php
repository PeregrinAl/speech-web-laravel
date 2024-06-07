<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Упражнение: дыхание') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="font-mono text-xl font-bold text-center p-6 my-6">
                    <p class="text-sky-800">{{ $exercise->description }}<button id="playButton">🔊</button></p>
                    <audio id="audioPlayer" src="{{$exercise->task_voiceover_path}}" class="invisible"></audio>
                </div>
                <div class="flex justify-center m-6 p-6">
                    <svg width="160" height="160" viewBox="0 0 160 160" fill="none" xmlns="http://www.w3.org/2000/svg"
                        id="svgImage" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="160" height="160" fill="url(#pattern0_407_2349)" />
                        <defs>
                            <pattern id="pattern0_407_2349" patternContentUnits="objectBoundingBox" width="1"
                                height="1">
                                <use xlink:href="#image0_407_2349" transform="scale(0.00625)" />
                            </pattern>
                            <image id="image0_407_2349" width="160" height="160"
                                xlink:href="data:image/png;base64,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" />
                        </defs>
                    </svg>

                </div>
                <div class="flex justify-center m-6 p-6">

                    <x-button id="startButton">начать!</x-button>

                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('startButton').addEventListener('click', function () { startAnimation(); });
        document.getElementById('playButton').addEventListener('click', play);

        function startAnimation() {

            // var inhaleDuration = 1000 * <?php echo $exercise->inhale; ?>;// Преобразование в миллисекунды
            // var pauseDuration = 1000 * <?php echo $exercise->pause; ?>;
            // var exhalationDuration = 1000 * <?php echo $exercise->exhalation; ?>;

            // var svgImage = document.getElementById('svgImage');
            const inhaleDuration = 3000; // Время на вдох
            const pauseDuration = 2000; // Время на паузу
            const exhalationDuration = 4000; // Время на выдох

            const svgElement = document.getElementById('svgImage');

            // Увеличиваем элемент
            // Увеличение картинки
            console.log(inhaleDuration + 'ms');
            svgElement.style.transitionDuration = inhaleDuration + 'ms';
            svgElement.style.transform = 'scale(1.5)'; // Пример увеличения в 1.5 раза

            // Пауза
            setTimeout(() => {
                // Уменьшение картинки
                svgElement.style.transitionDuration = exhalationDuration + 'ms';
                svgElement.style.transform = 'scale(1)'; // Возвращаем к исходному размеру

            }, inhaleDuration + pauseDuration);


            // setTimeout(function () {
            //     // Анимация увеличения
            //     svgImage.style.transition = inhaleDuration / 1000 + 's';
            //     svgImage.style.width = '200px'; // Пример значения, увеличьте в соответствии с вашими требованиями
            //     svgImage.style.height = '200px';
            // });

            // // Анимация уменьшения
            // svgImage.style.transition = exhalationDuration / 1000 + 's';
            // svgImage.style.width = '100px'; // Исходный размер
            // svgImage.style.height = '100px';
        }

        function play() {
            console.log('rr');
            let audio = document.getElementById('audioPlayer');
            audio.play();

        }

        // const inhale = $exercise->inhale;
        // const pause = $exercise -> pause;
        // const exhalation = $exercise -> exhalation;

        // Начинаем процесс увеличения
    </script>


</x-app-layout>