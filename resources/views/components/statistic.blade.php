<section class="py-20 bg-[#FAFAF7]">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">

            @foreach($statistics as $stat)

                <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100 hover:shadow-xl transition">

                    <div class="text-4xl mb-4">

                        {{ $stat->icon }}

                    </div>

                    <h3 class="text-4xl font-black text-[#2E7D32]">

                        {{ $stat->value }}

                    </h3>

                    <p class="text-gray-600 mt-2 font-medium">

                        {{ $stat->title }}

                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>