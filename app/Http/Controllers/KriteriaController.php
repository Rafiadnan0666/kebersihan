<?php
namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kriterias = Kriteria::all();
        return response()->json($kriterias);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'lantai_bersih' => 'nullable|integer|between:0,1',
            'jendela_pintu_bersih' => 'nullable|integer|between:0,1',
            'kamar_rapi_bersih' => 'nullable|integer|between:0,1',
            'tidak_kasur_disimpan_dibawah' => 'nullable|integer|between:0,1',
            'alat_makan_mandi_disimpan_tempatnya' => 'nullable|integer|between:0,1',
            'tidak_pakaian_bergantungan_sembarangan' => 'nullable|integer|between:0,1',
            'toilet_kamar_bersih' => 'nullable|integer|between:0,1',
            'place_id' => 'required|exists:places,id',
        ]);

        $data = $request->all();

        $data['lantai_bersih'] = $request->filled('lantai_bersih') ? $request->lantai_bersih : 0;
        $data['jendela_pintu_bersih'] = $request->filled('jendela_pintu_bersih') ? $request->jendela_pintu_bersih : 0;
        $data['kamar_rapi_bersih'] = $request->filled('kamar_rapi_bersih') ? $request->kamar_rapi_bersih : 0;
        $data['tidak_kasur_disimpan_dibawah'] = $request->filled('tidak_kasur_disimpan_dibawah') ? $request->tidak_kasur_disimpan_dibawah : 0;
        $data['alat_makan_mandi_disimpan_tempatnya'] = $request->filled('alat_makan_mandi_disimpan_tempatnya') ? $request->alat_makan_mandi_disimpan_tempatnya : 0;
        $data['tidak_pakaian_bergantungan_sembarangan'] = $request->filled('tidak_pakaian_bergantungan_sembarangan') ? $request->tidak_pakaian_bergantungan_sembarangan : 0;
        $data['toilet_kamar_bersih'] = $request->filled('toilet_kamar_bersih') ? $request->toilet_kamar_bersih : 0;

        $kriteria = Kriteria::create($data);

        return response()->json($kriteria, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $kriteria = Kriteria::findOrFail($id);
        return response()->json($kriteria);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'lantai_bersih' => 'nullable|integer|between:0,1',
            'jendela_pintu_bersih' => 'nullable|integer|between:0,1',
            'kamar_rapi_bersih' => 'nullable|integer|between:0,1',
            'tidak_kasur_disimpan_dibawah' => 'nullable|integer|between:0,1',
            'alat_makan_mandi_disimpan_tempatnya' => 'nullable|integer|between:0,1',
            'tidak_pakaian_bergantungan_sembarangan' => 'nullable|integer|between:0,1',
            'toilet_kamar_bersih' => 'nullable|integer|between:0,1',
            'place_id' => 'required|exists:places,id',
        ]);

        $kriteria = Kriteria::findOrFail($id);

        $data = $request->all();

        $data['lantai_bersih'] = $request->filled('lantai_bersih') ? $request->lantai_bersih : 0;
        $data['jendela_pintu_bersih'] = $request->filled('jendela_pintu_bersih') ? $request->jendela_pintu_bersih : 0;
        $data['kamar_rapi_bersih'] = $request->filled('kamar_rapi_bersih') ? $request->kamar_rapi_bersih : 0;
        $data['tidak_kasur_disimpan_dibawah'] = $request->filled('tidak_kasur_disimpan_dibawah') ? $request->tidak_kasur_disimpan_dibawah : 0;
        $data['alat_makan_mandi_disimpan_tempatnya'] = $request->filled('alat_makan_mandi_disimpan_tempatnya') ? $request->alat_makan_mandi_disimpan_tempatnya : 0;
        $data['tidak_pakaian_bergantungan_sembarangan'] = $request->filled('tidak_pakaian_bergantungan_sembarangan') ? $request->tidak_pakaian_bergantungan_sembarangan : 0;
        $data['toilet_kamar_bersih'] = $request->filled('toilet_kamar_bersih') ? $request->toilet_kamar_bersih : 0;

        $kriteria->update($data);

        return response()->json($kriteria);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kriteria = Kriteria::findOrFail($id);
        $kriteria->delete();
        return response()->json(null, 204);
    }
}
