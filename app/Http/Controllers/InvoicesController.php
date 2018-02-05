<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class InvoicesController extends Controller
{
  public function index()
  {
    $invoices = DB::table('invoices')
      ->join('customers', 'invoices.CustomerId', '=', 'customers.CustomerId')
      ->orderBy('InvoiceDate', 'desc')
      ->limit(10)
      ->get();
    // dd($invoices);
    return view('invoices', [
      'invoices' => $invoices
    ]);
  }

  public function show($invoiceID)
  {
    $invoiceItems = DB::table('invoice_items')
      ->select('Quantity', 'invoice_items.UnitPrice', 'artists.Name as ArtistName', 'tracks.Name as TrackName')
      ->join('tracks', 'invoice_items.TrackId', '=', 'tracks.TrackId')
      ->join('albums', 'tracks.AlbumId', '=', 'albums.AlbumId')
      ->join('artists', 'artists.ArtistId', '=', 'albums.ArtistId')
      ->where('InvoiceId', '=', $invoiceID)
      ->get();

    return view('invoice-details', [
      'invoiceItems' => $invoiceItems
    ]);
  }
}
