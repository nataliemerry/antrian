<x-layout-admin title="Admin Antrian">
    <div class="bg-white p-6 rounded-lg shadow mt-20 ml-64">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Layanan Konsultasi</h1>
        </div>

        <table class="min-w-full bg-white">
            <thead>
                <tr class="w-full bg-birubps text-white">
                    <th class="w-1/6 text-center py-3 px-4 uppercase font-semibold text-sm">Nomor Antrian</th>
                    <th class="w-1/5 text-center py-3 px-4 uppercase font-semibold text-sm">Waktu Antri</th>
                    <th class="w-1/5 text-center py-3 px-4 uppercase font-semibold text-sm">Waktu Panggil</th>
                    <th class="w-1/5 text-center py-3 px-4 uppercase font-semibold text-sm">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($queues as $index => $queue)
                    <tr class="{{ $index % 2 == 0 ? 'bg-white' : 'bg-gray-100' }} text-gray-700 p-0">
                        <td class="w-1/6 text-center py-3 px-4">{{ $queue->queue_number }}</td>
                        <td class="w-1/5 text-center py-3 px-4">{{ $queue->created_at }}</td>
                        <td class="w-1/5 text-center py-3 px-4">{{ $queue->called_at }}</td>
                        <td>
                            <form action="{{ url('/queues/' . $queue->id . '/call') }}" method="post">
                                @csrf
                                @method('PATCH')
                                <div class="flex justify-center items-center gap-2">
                                    <button type="submit" class="bg-hijau hover:bg-lime-500 text-white px-10 py-1 rounded-md text-base panggil-btn" data-queue-number="{{ $queue->queue_number }}">Panggil</button>
                                </div>        
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout-admin>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let voices = [];
        
        function setVoiceOptions() {
            voices = speechSynthesis.getVoices();
            const indonesianFemaleVoice = voices.find(voice => voice.lang.startsWith('id') && voice.name.includes('Female'));

            const buttons = document.querySelectorAll('.panggil-btn');

            buttons.forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();

                    const queueNumber = button.getAttribute('data-queue-number');
                    const utterance = new SpeechSynthesisUtterance(`Nomor antrian ${queueNumber}`);

                    if (indonesianFemaleVoice) {
                        utterance.voice = indonesianFemaleVoice;
                    } else {
                        // Fallback to any Indonesian voice
                        const indonesianVoice = voices.find(voice => voice.lang.startsWith('id'));
                        if (indonesianVoice) {
                            utterance.voice = indonesianVoice;
                        }
                    }
                    
                    speechSynthesis.speak(utterance);

                    button.closest('form').submit();
                });
            });
        }

        // Wait for voices to be loaded before setting the options
        speechSynthesis.onvoiceschanged = setVoiceOptions;
    });
</script>