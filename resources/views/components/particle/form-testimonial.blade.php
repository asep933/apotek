<form
    action="{{ route("store.testimonial") }}"
    class="max-w-xl p-6 bg-white border rounded-lg shadow-lg"
    method="POST"
>
    @csrf
    <h2 class="text-2xl font-bold mb-6">Feedback Form</h2>

    <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="feedback">
            Feedback:
        </label>
        <textarea
            name="content"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="feedback"
            rows="5"
            placeholder="Enter your feedback"
        ></textarea>
    </div>
    <button
        class="bg-third hover:bg-secondary text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
        type="submit"
    >
        Submit
    </button>
</form>
