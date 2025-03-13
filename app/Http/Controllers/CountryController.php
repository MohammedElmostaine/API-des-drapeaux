<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::all();
        return response()->json($countries);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'capital' => 'required|string|max:255',
            'population' => 'required|integer',
            'region' => 'required|string|max:255',
            'currency' => 'nullable|string|max:255',
            'language' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $country = Country::create($request->all());

        return response()->json($country, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        return response()->json($country);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Country $country)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:255',
            'capital' => 'sometimes|required|string|max:255',
            'population' => 'sometimes|required|integer',
            'region' => 'sometimes|required|string|max:255',
            'currency' => 'nullable|string|max:255',
            'language' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $country->update($request->all());

        return response()->json($country);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        $country->delete();
        return response()->json(null, 204);
    }

    /**
     * Upload a flag for the country.
     */
    public function uploadFlag(Request $request, Country $country)
{
    // Step 1: Debug the incoming request data to ensure the file is coming through.
    \Log::info('Incoming request data: ', $request->all());  // Log all request data

    // Step 2: Validate the request.
    $validator = Validator::make($request->all(), [
        'flag' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20048',
    ]);

    if ($validator->fails()) {
        \Log::error('Validation failed: ', $validator->errors()->toArray());  // Log validation errors
        return response()->json(['errors' => $validator->errors()], 422);
    }

    // Step 3: Check if the file is being received properly.
    if ($request->hasFile('flag')) {
        \Log::info('File received: ', [$request->file('flag')->getClientOriginalName()]);  // Log the file name

        // Check if the file is valid.
        if ($request->file('flag')->isValid()) {
            \Log::info('File is valid and ready to be uploaded.');
            
            // Generate the file name and move it to the correct directory.
            $flagName = time() . '.' . $request->flag->extension();
            $request->flag->move(public_path('flags'), $flagName);

            // Step 4: Update the country object with the new flag URL.
            $country->flag_url = 'flags/' . $flagName;
            $country->save();

            \Log::info('File uploaded successfully, country updated: ', [$country->toArray()]);  // Log the country data

            return response()->json([
                'message' => 'Drapeau téléchargé avec succès',
                'country' => $country
            ]);
        } else {
            \Log::error('File upload error: File is not valid.');
            return response()->json(['message' => 'Le fichier n\'est pas valide.'], 400);
        }
    } else {
        \Log::error('No file uploaded.');
        return response()->json(['message' => 'Aucun fichier téléchargé.'], 400);
    }
}



    /**
     * Get the flag for the country.
     */
    public function getFlag(Country $country)
    {
        if (!$country->flag_url) {
            return response()->json(['message' => 'Aucun drapeau disponible'], 404);
        }

        return response()->file(public_path($country->flag_url));
    }
}