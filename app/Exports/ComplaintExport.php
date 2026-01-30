<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\Complaint;

class ComplaintExport implements FromCollection, WithHeadings
{
    public function __construct($request)
    {
        $this->request = $request;
    }

    public function collection()
    {
        $query = Complaint::with('masyarakat.user');

        if ($this->request->status) {
            $query->where('status', $this->request->status);
        }

        if ($this->request->tanggal_awal && $this->request->tanggal_akhir) {
            $query->whereBetween('created_at', [$this->request->tanggal_awal, $this->request->tanggal_akhir]);
        }

        return $query->get()->map(function ($item) {
            return [$item->masyarakat->user->name, $item->judul, $item->status, $item->tanggapan, $item->created_at->format('d-m-Y')];
        });
    }

    public function headings(): array
    {
        return ['Nama Pengadu', 'Judul Pengaduan', 'Status', 'Tanggapan', 'Tanggal'];
    }
}
