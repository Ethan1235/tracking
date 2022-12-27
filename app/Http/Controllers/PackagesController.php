<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PackageRequest;

class PackagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$packages = Package::paginate(15);
		return view('packages.index', compact('packages'));
	}

    public function show(Package $package)
    {
        return view('packages.show', compact('package'));
    }

	public function create(Package $package)
	{
		return view('packages.create_and_edit', compact('package'));
	}

	public function store(PackageRequest $request)
	{
		$package = Package::create($request->all());
		return redirect()->route('packages.show', $package->id)->with('message', 'Created successfully.');
	}

	public function edit(Package $package)
	{
        $this->authorize('update', $package);
		return view('packages.create_and_edit', compact('package'));
	}

	public function update(PackageRequest $request, Package $package)
	{
		$this->authorize('update', $package);
		$package->update($request->all());

		return redirect()->route('packages.show', $package->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Package $package)
	{
		$this->authorize('destroy', $package);
		$package->delete();

		return redirect()->route('packages.index')->with('message', 'Deleted successfully.');
	}
}